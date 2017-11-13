@extends('layout.master')


<!-- Section: contact info -->
<section id="contact-info" class="section-contact-info bg-light">
    <div class="bg-img">


        <div class="content-w3ls">
            <h1 class="agile-head text-center">Post Your Job Here</h1>
            <form role="form" action="/jobs" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="header">Category</label>
                    <select name="category_id" required class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="header">Student Class</label>
                    <select name="class_name_id" required class="form-control">
                        @foreach($classNames as $className)
                            <option value="{{$className->id}}">{{$className->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="header">City</label>
                    <select name="city_id" required class="form-control">
                        @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label class="header">Location</label>
                    <select name="location_id" required class="form-control">
                        <option value="">Select One</option>
                        <option value="0">mohammadpur</option>
                        <option value="1">mirpur</option>
                        <option value="2">Dhanmondi</option>
                        <option value="3">Mohakhali</option>
                        <option value="4">Uttora</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="header" >Salary Range</label>
                    <input name="offer_salary" class="form-control" type="number"   required="">
                </div>

                <div class="form-group">
                    <label class="header">Student Gender</label>
                    <select name="sudent_gender" required class="form-control">
                        <option  value="any">any</option>
                        <option  value="male">male</option>
                        <option  value="female">female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="header">Teacher Preferred Gender</label>
                    <select name="tutor_gender" required class="form-control">
                        <option  value="any">any</option>
                        <option  value="male">male</option>
                        <option  value="female">female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="header">Days in Week<span>:</span></label>
                    <select name="days_in_week" required class="form-control">
                        @for($i=1;$i<=7;$i++)
                        <option  value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label class="header">Subject(s):<span>:</span></label>
                    <input class="form-control" type="text"  name="subject" required="">
                    <div class="clear"></div>
                </div>
                <div class="form-group">
                    <label class="enquiry">Write Your job description <span>:</span></label>
                    <textarea class="form-control" id="message" name="description"></textarea>
                    <div class="clear"></div>
                </div>

                <div class="form-group w3ls-end">
                    <input type="reset" class="reset" value="Reset">
                    <input type="submit" class="register" value="Submit">
                </div>
            </form>
        </div>

    </div>
</section>
<!-- /Section: contact info -->