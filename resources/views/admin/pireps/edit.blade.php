@extends('admin.app')
@section('title', 'Edit ' . $pirep->ident )

@section('content')
<div class="content">
   <div class="card border-blue-bottom">
       <div class="content">

            {{-- pulled out to here otherwise the form::close() within a form undo it --}}
           <div class="row">
               <div class="col-md-8">
                   <h5 style="margin-top: 0px;">
                       Filed By: <a href="{!! route('admin.users.edit', [$pirep->user_id]) !!}" target="_blank">
                           {!! $pirep->user->pilot_id !!} {!! $pirep->user->name !!}
                       </a>
                   </h5>
               </div>
               <div class="col-md-4">
                   <div class="pull-right">
                       @include('admin.pireps.actions', ['pirep' => $pirep, 'on_edit_page' => true])
                   </div>
               </div>
           </div>

           {!! Form::model($pirep, ['route' => ['admin.pireps.update', $pirep->id], 'method' => 'patch']) !!}
                @include('admin.pireps.fields')
           {!! Form::close() !!}
       </div>
   </div>

    <div class="card border-blue-bottom">
        <div class="content">
            <h4>field values</h4>
            @include('admin.pireps.field_values')
        </div>
    </div>

    <div class="card border-blue-bottom">
        <div class="content">
            <h4>comments</h4>
            @include('admin.pireps.comments')
        </div>
    </div>

    <div class="card border-blue-bottom">
        <div class="content">
            <h4>flight log</h4>
            @include('admin.pireps.flight_log')
        </div>
    </div>

</div>
@endsection

@include('admin.pireps.scripts')
