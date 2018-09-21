@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h3>My Favorites</h3>
                </div>

                @forelse ($myFavorites as $myFavorite)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $myFavorite->title }}
                        </div>

                        <div class="panel-body">
                            {{ $myFavorite->body }}
                        </div>

                        @if(Auth::check())
                            <div class="panel-footer">
                                <favorite
                                    :post={{ $myFavorite->id }}
                                    :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                                ></favorite>                                
                            </div>
                    </div>
                @empty
                    <p> You have no favorited posts </p>
                @endforelse
            </div>    
        </div>    
    </div>    

@endsection