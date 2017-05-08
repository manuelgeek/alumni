@extends('main')
@section('title', '| Contact')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label name="Message">Message:</label>
                        <textarea name="message" id="message" class="form-control">Message here...</textarea>
                    </div>
                    <input type="submit" name="btn-message" value="Send Message" class="btn btn-success">
                </form>
                
            </div>
        </div>
    @endsection
   