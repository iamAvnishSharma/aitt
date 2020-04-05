<html lang="en">
<head>
    <title>Laravel 5 maatwebsite export into csv and excel and import into DB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
    <div class="panel panel-primary">
 <div class="panel-heading">Laravel 5 maatwebsite export into csv and excel and import into DB</div>
  <div class="panel-body"> 
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <a href="{{ route('excel-file',['type'=>'xls']) }}">Download Excel xls</a> |
        <a href="{{ route('excel-file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |
        <a href="{{ route('excel-file',['type'=>'csv']) }}">Download CSV</a>
      </div>
   </div>  
   
        <form action="/import-csv-excel" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label >Select File to Import::</label>
                    <div class="col-md-9">
                    <input type="file" id="sample_file" name="sample_file" >
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <input type="submit" name="submit" value="Submit" >
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>