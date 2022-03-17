@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    Add Discount
                </div>
                <div class="card-body">
                    {{-- @include('components.alert') --}}
                    <form action="{{ route('admin.discount.store') }}" method="post">
                      @csrf
                      <div class="form-group mb-4">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" required/>
                        @if ($errors->has('name'))
                          <p class="text-danger"> {{ $errors->first('name') }} </p> 
                        @endif
                      </div>
                      <div class="form-group mb-4">
                        <label for="" class="form-label">Code</label>
                        <input type="text" name="code" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" value="{{ old('code') }}" required/>
                        @if ($errors->has('code'))
                          <p class="text-danger"> {{ $errors->first('code') }} </p> 
                        @endif
                      </div>
                      <div class="form-group mb-4">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" cols="0" rows="2" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                          <p class="text-danger"> {{ $errors->first('description') }} </p> 
                        @endif
                      </div>
                      <div class="form-group mb-4">
                        <label for="" class="form-label">Discount Persentage</label>
                        <input name="percentage" type="number" class="form-control {{ $errors->has('percentage') ? 'is-invalid' : '' }}" value="{{ old('percentage') }}" required name="percentage" min="1" max="100"/>
                        @if ($errors->has('percentage'))
                          <p class="text-danger"> {{ $errors->first('percentage') }} </p> 
                        @endif
                      </div>
                      <div class="form-group mb-4">
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                    {{-- <table class="table">
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection