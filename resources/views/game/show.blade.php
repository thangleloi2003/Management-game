@extends('layout.layout')
@section('title', 'Game List')
@section('content')
 <div class="card" style="color:#ff9f6b; ">
        <div class="card-body">
            <div class="card">
                {{-- <video autoplay loop muted plays-inline>
                    <source src="{{URL('video/ytpubg.mp4')}}" type="video/mp4">
                </video> --}}
            <h4 class="card-title">{{$game->title}}</h4>
            <img src="{{url("/upload/".$game->photo)}}" alt="" class="profile-pic">
            <h6 class="card-subtitle mb-2 text-muted">{{$game->publisher->name}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$game->category->name}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">
                @foreach($game->platforms as $platform)
                    {{$platform->name}};
                @endforeach
            </h6>
            <p class="card-text">{{$game->description}}</p>
        </div>
        </div>
    </div>
    @endsection
    <style>
        .card {
            max-width: 100%;
          /* width: 450px;
          height: 500px; */
          margin-left: 30px;
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 10px;
          padding: 0px 15px;
          background-color: #ff9f6b;
          border-radius: 10px;
          border: none;
          color: white;
          position: relative;
          cursor: pointer;
          font-weight: 900;
          transition-duration: .2s;
          /* background: linear-gradient(0deg, rgb(#ff9867), rgb(#ff9867)); */
          /* background-color: rgba(68, 68, 68, 0.5); /* Màu nền trong suốt */
  /* border-radius: 14px;
  opacity: 0.8; */ */
 
        }    
        .card:before, .card:after {
          content: '';
          position: absolute;
          left: -2px;
          top: -2px;
          border-radius: 10px;
          background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
            #0000ff, #00ff00,#ffff00, #ff0000);
          background-size: 400%;
          width: calc(100% + 4px);
          height: calc(100% + 4px);
          z-index: -1;
          animation: steam 20s linear infinite;
        }
        
        @keyframes steam {
          0% {
            background-position: 0 0;
          }
        
          50% {
            background-position: 400% 0;
          }
        
          100% {
            background-position: 0 0;
          }
        }
        
        .card:after {
          filter: blur(100px);
        }
        
      </style>
{{-- --------- --}}

{{-- <div class="card">
    <div class="card-image"><img src="{{url("/upload/".$game->photo)}}" alt="" class="profile-pic"></div>
    <p class="card-title">{{$game->title}}</p>
    <p class="card-body">
      Nullam ac tristique nulla, at convallis quam. Integer consectetur mi nec magna tristique, non lobortis.
    </p>
    <p class="footer">Written by <span class="by-name">John Doe</span> on <span class="date">25/05/23</span></p>
  </div>

  <style>

.card {
    justify-content: center;

  padding: 20px;
  width: 330px;
  min-height: 370px;
  border-radius: 20px;
  background: #e8e8e8;
  box-shadow: 5px 5px 6px #dadada,
               -5px -5px 6px #f6f6f6;
  transition: 0.4s;
}

.card:hover {
  translate: 0 -10px;
}

.card-title {
  font-size: 18px;
  font-weight: 600;
  color: #2e54a7;
  margin: 15px 0 0 10px;
}

.card-image {
    width: 30%;
  min-height: 170px;
  background-color: #c9c9c9;
  border-radius: 15px;
  box-shadow: inset 8px 8px 10px #c3c3c3,
            inset -8px -8px 10px #cfcfcf;
}

.card-body {
  margin: 13px 0 0 10px;
  color: rgb(31, 31, 31);
  font-size: 15px;
}

.footer {
  float: right;
  margin: 28px 0 0 18px;
  font-size: 13px;
  color: #636363;
}

.by-name {
  font-weight: 700;
}
  </style> --}}

   
