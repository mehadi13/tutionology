/* ------------------------------------------------------------------------------------------------------------------ *
 *
 * jQuery template customizer
 *
 * Version  2.1.1
 * Author   Valery Timofeev
 * Site     vtdes.ru
 *
 * Licensed under MIT license
 * Copyright (c) 2015-2017 Valery Timofeev
 *
 * ------------------------------------------------------------------------------------------------------------------ */

'use strict';

(function($) {


    /**
     * Default plugin configuration
     * @type object
     */
    var defaults = {

        content      : '',
        title        : 'Theme customizer',
        parent       : 'body',
        id           : 'customizer',
        toggleControl: '.customizer-toggle',

        templates: {
            customizer: '<div class="customizer"><a href="#" class="customizer-toggle"></a><div class="customizer-heading"><div class="customizer-title"></div></div><div class="customizer-body"></div></div>',
            panel     : '<div class="customizer-panel"></div>',
            control   : '<div class="customizer-control"></div>',
            navWrapper: '<ul class="customizer-navigation"></ul>',
            navItem   : '<li><a href="#" class="customizer-navigation-item"></a></li>'
        }
    };


    /*
     * Plugin class
     * ============ */

    var tCustomizer = function(options) {

        this.options = $.extend({}, defaults, options);
        this.panels = {};

        return this.init();
    };

    tCustomizer.prototype.init = function() {

        // Set values
        this.$parent = $(this.options.parent);
        this.$element = $(this.options.templates.customizer);

        // Append customizer
        this.$parent.append(this.$element);

        // Customizer
        this.$element.attr('id', this.options.id);
        this.$element.find('.customizer-title').html(this.options.title);

        // Navigation
        this.$element.find('.customizer-body').append($(this.options.templates.navWrapper));

        // Toggle controls
        this.$element.find(this.options.toggleControl)
            .attr('data-customizer', '#' + this.options.id);

        // Toggle event
        this.$element.on('click.tCustomizer', this.options.toggleControl, this.toggle);
    };

    tCustomizer.prototype.show = function() {
        this.$element.addClass('in');
    };

    tCustomizer.prototype.hide = function() {
        this.$element.removeClass('in');
    };

    tCustomizer.prototype.toggle = function(e) {

        e.preventDefault();

        var selector = $(this).attr('data-customizer');
        if (typeof selector === 'undefined') return;

        $(selector).toggleClass('in');
    };

    tCustomizer.prototype.createPanel = function(data) {

        var name = data['name'] || 'unnamed',
            title = data['title'] || 'Untitled';

        var $panel = $(this.options.templates.panel);
        $panel.attr('id', 'customizer-panel-' + name);

        this.panels[name] = {
            $element: $panel,
            title   : title,
            controls: {}
        };

        // Append panel
        this.$element.find('.customizer-body').append(this.panels[name].$element);

        // Append navigation link
        var $navItem = $(this.options.templates.navItem);
        $navItem.find('a')
            .attr('data-customizer-panel', name)
            .html(title);

        this.$element.find('.customizer-navigation').append($navItem);
    };

    tCustomizer.prototype.togglePanel = function(e) {

        e.preventDefault();

        var $this = $(this),
            panel = $this.attr('data-customizer-panel');

        if (panel === 'undefined') return;

        panel = 'customizer-panel-' + panel;

        var $panel = $('#' + panel);
        if ($panel.length === 0) return;

        $this.parent().toggleClass('active');
        $this.parent().parent().toggleClass('customizer-panel-open');

        $panel.toggleClass('customizer-panel-active');
    };

    tCustomizer.prototype.addControl = function(panelName, data) {

        var type = data['type'],
            $control = null;

        if (!this.panels[panelName] || type === 'undefined') return;

        switch (type) {

            case 'select':
                $control = this._controlSelect(data);
                break;

            case 'text':
                $control = this._controlText(data);
                break;

            case 'radio':
                // $control = this._elementRadio(data);
                break;

            case 'checkbox':
                // $control = this._elementCheckbox(data);
                break;

        }

        this.panels[panelName].$element.append($control);
    };

    tCustomizer.prototype._controlSelect = function(_data) {

        var useGroups = _data['useGroups'] || false,
            title     = _data['title']     || '',
            id        = _data['id']        || '',
            classes   = _data['class']     || '',
            value     = _data['value']     || '',
            events    = _data['events']    || {},
            data      = _data['data']      || [];

        var groupName, option, optionData;

        var $control = $(this.options.templates.control),
            $select = $('<select>'),
            $option = null,
            $optgroup = null;

        if (title) {

            var $label = $('<label>');

            $label
                .html(title)
                .addClass('customizer-label');

            if (id) $label.attr('for', id);
            $control.append($label);
        }

        $select
            .attr('id', id)
            .addClass(classes);


        for (var event in events) {
            if (!events.hasOwnProperty(event)) continue;
            $select.on(event + '.tCustomizer', events[event]);
        }

        if (useGroups) {

            // Each optgroup
            for (groupName in data) {

                if (!data.hasOwnProperty(groupName)) continue;

                $optgroup = $('<optgroup>');
                $optgroup.attr('label', groupName);

                // Each option
                for (option in data[groupName]) {

                    if (!data[groupName].hasOwnProperty(option)) continue;

                    $option = $('<option>');
                    optionData = data[groupName][option];

                    $option
                        .val(optionData['value'])
                        .html(optionData['text']);

                    if (optionData['value'] === value) {
                        $option.attr('selected', 'selected');
                    }

                    $optgroup.append($option);
                }

                $select.append($optgroup);
            }

        } else {

            // Each option
            for (option in data) {

                if (!data.hasOwnProperty(option)) continue;

                $option = $('<option>');
                optionData = data[option];

                $option
                    .val(optionData['value'])
                    .html(optionData['text']);

                if (optionData['value'] === value) {
                    $option.attr('selected', 'selected');
                }

                $select.append($option);
            }

        }

        $control.append($select);
        return $control;
    };

    tCustomizer.prototype._controlText = function(_data) {

        var title   = _data['title']  || '',
            id      = _data['id']     || '',
            classes = _data['class']  || '',
            value   = _data['value']  || '',
            events  = _data['events'] || {};

        var $control = $(this.options.templates.control),
            $input = $('<input>');

        if (title) {

            var $label = $('<label>');

            $label
                .html(title)
                .addClass('customizer-label');

            if (id) $label.attr('for', id);
            $control.append($label);
        }

        $input
            .attr('type', 'text')
            .attr('id', id)
            .addClass(classes);

        if (value) {
            $input.val(value);
        }

        for (var event in events) {
            if (!events.hasOwnProperty(event)) continue;
            $input.on(event + '.tCustomizer', events[event]);
        }

        $control.append($input);
        return $control;
    };


    /*
     * Plugin definition
     * ================= */

    function Plugin(options) {
        return new tCustomizer($.extend({}, defaults, options));
    }

    $.fn.tCustomizer = Plugin;
    $.fn.tCustomizer.Constructor = tCustomizer;


    /*
     * Plugin API
     * ========== */

    $(document)
        .on('click.tCustomizer', '[data-customizer-panel]', tCustomizer.prototype.togglePanel);


})(jQuery);
