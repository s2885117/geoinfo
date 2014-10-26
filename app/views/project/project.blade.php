@extends('homeLayout')
@section('title')
Projects
@stop
@section('body')
<!-- @if (isset($projects)) ///COMMENTED FOR WHEN MULTIPLE PROJECTS IS ENABLED
<h3>Your Projects</h3>
<ul>
@foreach ($projects as $project)
<li> {{ link_to_route('project.show', $project->project_name, array($project->id)) }}
</li>
@endforeach
</ul>
@else -->
<div class="project">
<div id="header">
  <h2 id="name">{{ $project->project_name }} </h2>
  <h4 id="cost_centre">Cost Center: {{ $project->cost_center }}</h4>
</div>
<div id="body">
  <b/>
  <!--<h3>{{ link_to_route('overview.show', 'Enter Project', array($project->id)) }}</h3>-->
  {{ link_to_route('overview.show', 'Enter Project', array($project->id), array('type' => 'button','class' => 'btn btn-success','id'=>'project_button')) }}
  <h3 class="headings">Sub-Users for this Project</h3>
  {{ Form::open(array('action' => array('UserController@savePosition', $project->id), 'class' => 'form')) }}
  <table>
    @if (Auth::user()->admin == true)
    <tr>
      <td></td>
      <td style="padding-left: 10px; padding-right: 10px;">Admin</td>
      <td style="padding-left: 10px; padding-right: 10px;">Finance</td>
      <td style="padding-left: 10px; padding-right: 10px;">Tech</td>
      <td style="padding-left: 10px; padding-right: 10px;">Default User</td>
    </tr>
    @endif
  @foreach ($users as $user)
    <tr>
      <td><li class="no_list"><h4 class="user_list"> {{ $user->name }}</h4></li></td>
      @if (($user->id != Auth::user()->id) && (Auth::user()->admin == true) && ($user->creator == false))
      @if ($user->admin == true)
      <td style="text-align:center;">{{Form::radio($user->id, 'admin', true);}}</td>
      @else
      <td style="text-align:center;">{{Form::radio($user->id, 'admin');}}</td>
      @endif
      @if ($user->finance == true)
      <td style="text-align:center;">{{Form::radio($user->id, 'finance', true);}}</td>
      @else
      <td style="text-align:center;">{{Form::radio($user->id, 'finance');}}</td>
      @endif
      @if ($user->tech == true)
      <td style="text-align:center;">{{Form::radio($user->id, 'tech', true);}}</td>
      @else
      <td style="text-align:center;">{{Form::radio($user->id, 'tech');}}</td>
      @endif
      @if (($user->admin == false) && ($user->finance == false) && ($user->tech == false))
      <td style="text-align:center;">{{Form::radio($user->id, 'default', true);}}</td>
      @else
      <td style="text-align:center;">{{Form::radio($user->id, 'default');}}</td>
      @endif
      @endif
    </tr>
  @endforeach
  </table>
  @if(Auth::user()->admin == true)
  <!-- /*{{ link_to_action('UserController@edit', "Create a Sub-User", array($project->id)) }}-->
  {{ link_to_action('UserController@edit', "Create a Sub-User", array($project->id), array('type' => 'button','class' => 'btn btn-default','id' => 'sub_user')) }}
  {{ link_to_action('ValuesController@index', "Values Page", array(), array('type' => 'button','class' => 'btn btn-default','id' => 'values_page')) }}
  {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'float: right', 'id' => 'user_position')) }}
  @endif
  <!-- @endif -->
  </div>
  <div>
  <h3 class="headings">Download Files</h3>

  <ul class="no_list">
    @foreach ($uploads as $upload)
    <li class="file_list">
      <a href="downloads/{{{$upload->id}}}">{{{ $upload->file_name }}}</a>
      
      <a class="btn btn-default btn-xs" id="delete_button" href="deleteFile/{{{$upload->id}}}">Delete</a>
    </li>
    @endforeach
  </ul>
  <div>
    {{ link_to_action('UploadController@upload', "Upload Files", array($project->id), array('type' => 'button','class' => 'btn btn-default','id' => 'upload_button'))}}
  </div>
</div>
</div>
<br />
<!-- {{ link_to_route('project.index', 'Back' ) }} <br/> ///COMENT FOR WHEN MULTIPLE PROJECTS ARE ENABLED-->
<!-- <h4>{{ link_to_route('project.create', 'Create a New Project' ) }}</h4> -->
@stop