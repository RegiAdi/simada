@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Module Access
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($moduleAccess, ['route' => ['moduleAccesses.update', $moduleAccess->id], 'method' => 'patch']) !!}

                        @include('module_accesses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection