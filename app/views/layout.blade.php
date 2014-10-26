<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/userInput.css') }}
      
    <!--Google Maps-->
    {{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places') }}
    

    
    
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a href="/project/geoinfo/public">{{ HTML::image("images/leftLogo.png", "Logo", array('style' => 'margin-left: -20px;')) }}</a>-->
          <h3>{{ link_to_route('index.index', 'HaBUtek') }}</h3>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li @yield('projectState')>{{ link_to_route('overview.show', 'Project Overview', array($id)) }}</li>
            <li @yield('activState')>{{ link_to_route('activities.show', 'Approval Activities', array($id)) }}</li>
            <li @yield('siteState')>{{ link_to_route('siteConditions.show', 'Site Conditions', array($id)) }}</li>
            <li @yield('infraState')>{{ link_to_route('infrastructure.show', 'Infrastructure', array($id)) }}</li>
            <!--<li @yield('resourceState')>{{ link_to_route('accessResources.show', 'Access to Resources', array($id)) }}</li>-->
           <!-- <li @yield('constructState')>{{ link_to_route('construction.show', 'Construction Waste', array($id)) }}</li>-->
          <!--  <li @yield('otherState')>{{ link_to_route('other.show', 'Other', array($id)) }}</li>-->
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{ url('biodiversity', array($id)) }}"><span class="glyphicon glyphicon-globe"></span> Biodiversity</a></li>
            <li><a href="{{ url('climate', array($id)) }}"><span class="glyphicon glyphicon-cloud"></span> Climate</a></li>
            <li><a href="{{ url('health', array($id)) }}"><span class="glyphicon glyphicon-heart"></span> Health</a></li>
            <li><a href="{{ url('investment', array($id)) }}"><span class="glyphicon glyphicon-usd"></span> Investment</a></li>
            <li><a href="{{ url('labour_productivity', array($id)) }}"><span class="glyphicon glyphicon-cog"></span> Labour Productivity</a></li>
            <li><a href="{{ url('landscape', array($id)) }}"><span class="glyphicon glyphicon-picture"></span> Landscape</a></li>
            <li><a href="{{ url('place', array($id)) }}"><span class="glyphicon glyphicon-map-marker"></span> Place</a></li>
            <li><a href="{{ url('property', array($id)) }}"><span class="glyphicon glyphicon-home"></span> Property</a></li>
            <li><a href="{{ url('renewables', array($id)) }}"><span class="glyphicon glyphicon-refresh"></span> Renewables</a></li>
            <li><a href="{{ url('transport', array($id)) }}"><span class="glyphicon glyphicon-road"></span> Transport</a></li>
            <li><a href="{{ url('walkability', array($id)) }}"><span class="glyphicon glyphicon-arrow-right"></span> Walkability</a></li>
            <li><a href="{{ url('construction_indicators', array($id)) }}"><span class="glyphicon glyphicon-trash"></span> Construction Indicators</a></li> 
            <li><a href="{{ url('operations', array($id))}}"><span class="glyphicon glyphicon-wrench"></span> Operations</a></li> 
            <li><a href="{{ url('water', array($id)) }}"><span class="glyphicon glyphicon-tint"></span> Water</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#"><span class="glyphicon glyphicon-export"></span> Export Scenario</a></li>
            <li><a href="{{ url('generate_summary', array($id)) }}"><span class="glyphicon glyphicon-align-justify"></span> Summary</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-ok"></span> Final Report</a></li>
          </ul>
        </div>
        <div class="row main">
          <div class="col-sm- panel-group" id="mainInfo">
            @yield('body')
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/geo_info.js') }}
  </body>
</html>