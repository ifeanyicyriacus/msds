@extends('layouts.regularMaster')
@section('page_title')
    
@endsection
@section('page_style')
<style>
  body{
    background-image: url({{url('assets/images/chat3.png')}});

  }

  /* .scrollspy-example {
      position: relative;
      height:   400px;
      margin-top: .5rem;
      overflow: auto;

      background-image: url({{url('assets/images/chat1.jpg')}});
  } */


  /* Chat containers */
  .w3container {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      padding: 10px;
      margin: 10px 0; 
  }
  .your {
    border-radius: 0px 20px 20px 20px;
    min-width: auto;
    max-width: 70%;
    float: left;
    clear: both;
  }
  .mine {
    border-radius: 20px 0px 20px 20px;
    min-width: auto;
    max-width: 70%;
    float: right;
    clear: both;
    }
  

  /* Darker chat container */
  .w3darker {
      border-color: #ccc;
      background-color: #ddd;
  }

  /* Clear floats */
  .w3container::after {
      content: "";
      clear: both;
      display: table;
  }

  /* Style images */
  .w3container img {
      float: left;        
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
  }

  /* Style the right image */
  .w3container img.w3right {
      float: right;
      margin-left: 20px;
      margin-right:0;
  }

  /* Style time text */
  .w3time-right {
      float: right;
      color: #aaa;
  }

  /* Style time text */
  .w3time-left {
      float: left;
      color: #999;
  }
</style>

@endsection
@section('content')
{{-- diagnosis view --}}

{{-- this will tell the user how soon daignosis will be over --}}
{{-- <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%"></div>
</div> --}}

{{-- this is the greeting message from MS&DS --}}
<div class="your w3container bg-white text-dark">
  <img src="{{url('assets/images/loading.gif')}}" alt="MSDSAvatar">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>
{{-- END OF Welcome message --}}

{{-- beginning of stored chat message--}}
<div id="chats">
  @forelse($chats as $chat)
    <div class="mine w3container bg-dark text-light">
      <img src="{{url('assets/images/avatar/male1.jpg')}}" alt="myAvatar" class="w3right">
      <p>{{$chat->message}}</p>
      <span class="w3time-left">{{$chat->created_at->diffForHumans()}}</span>
    </div>
  @empty
    <div class="your w3container bg-white text-dark">
      <img src="{{url('assets/images/loading.gif')}}" alt="MSDSAvatar">
      <p>Hello. How are you today?</p>
      <span class="time-right">11:00</span>
    </div>
  @endforelse
</div>

{{-- end of stored chat message--}}


    <div class="container" >
          <div class="input-group mb-3 form-inline navbar navbar-light bg-light">
              <div class="">
                  <form action="{{url('diagnosis')}}" method="post" class="input-group-append">
                      {{csrf_field() }}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}
                      {{--<input type="hidden" name="symptoms[]" value="">--}}


                      <input id="chatTextbox" name="symptoms" type="text" class="form-control" placeholder="Enter your symptoms in a comma (,) separated list" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus="autofocus" required>
                      <button class="btn btn-danger" type="submit" id="complete" title="click here to send diagnosis list">Complete</button>


                  </form>
                  {{--TODO also a chat issue - i am testing the dianosis function--}}
                  {{--<input id="chatTextbox" name="chatTextbox" type="text" class="form-control" placeholder="Enter response" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus="autofocus">--}}
                  {{--<button class="btn btn-success" type="button" id="send">Send</button>--}}



              </div>

          </div>
        </div>
    

  {{-- </form> --}}


@endsection

@section('page_script')
    {{--the below will provide the _token input--}}
    {{csrf_field()}}

    {{--@if (Auth::guest())--}}
    {{--<input type="email" hidden name="userid" value="Anonymous@Anonymous.com">--}}
    {{--@else--}}
    {{--<input type="email" hidden name="userid" value="{{ Auth::user()->email }}">--}}
    {{--@endif--}}
    {{--value for userid is found in the navbar--}}

    <script>
        $(document).ready(function () {
//            $('#send').click(function (event) {
//                var message = $('#chatTextbox').val();
//                  if (message == "") {
//                      alert('Please enter proper response');
//                  }else{
//                      $.post('chat',{
//                          'message':message,
//                          'sender':$('input[name=userid]').val(),
//                          'receiver':'MS&DS',
//                          '_token':$('input[name=_token]').val()
//                      },function(data){
//                          /*$('#chats').load(location.href + ' #chats',{
//                              'message':message,
//                              'sender':$('input[name=userid]').val(),
//                              'receiver':'MS&DS',
//                              '_token':$('input[name=_token]').val()
//                          });*/
//                          $('#chats').load(location.href + ' #chats');
//                          console.log(data);
//
//                      });
//                  }
//            });

//            TODO later i will continue work with chat








//            $('#complete').click(function (event) {
////                if symptom array is empty say somethhing
////                else do the need ful (send it)
////
//            });



        });



        //repeat the above function for MS&DS bot chatting (vice versa)

        //$(document).ready(function () {
        //    $('#send').click(function (event) {
        //        var message = $('#chatTextbox').val();
        //        if (message == "") {
        //            alert('Please enter proper response');
        //        }else{
        //            $.post('chat',{
        //                'chat':message,
        //                'sender':'MS&DS',
        //                'receiver':$('input[name=userid]').val(),
        //                '_token':$('input[name=_token]').val()
        //            },function(data){
        ////      console.log(data);
        //
        //                $('#chats').load(location.href + ' #chats',{
        //                    'chat':message,
        //                    'sender':'MS&DS',
        //                    'receiver':$('input[name=userid]').val(),
        //                    '_token':$('input[name=_token]').val(),
        //                });
        //            },)
        //        }
        //
        //    });
        //});
        //

    </script>

@endsection