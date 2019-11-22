@extends('layouts.app')

@section('content')
 <section class="content-header">
        <h3 class="pull-left">{{ Breadcrumbs::render() }}</h3>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('inventaris.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="">
                   {!! Form::model($mutasi, ['route' => ['mutasis.update', $mutasi->id], 'method' => 'patch', 'id' => 'form-mutasi']) !!}

                        @include('mutasis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection