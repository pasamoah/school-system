<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-pencil-square-o"></i> Create Class
			</div>

			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">
				<form class="btn-submit" id="ajax">
					@csrf
					<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="class_name" required="">
				</div>

				<div class="form-group">
					<label>Class Numeric</label>
					<input type="text" class="form-control" name="class_numeric">
				</div>

				<div class="form-group">
					<label>Section</label>
			         <select class="form-control" name="class_section">
		                <option disabled selected> -- Select -- </option>
		                @foreach($section_list as $section_list)
		                <option value="{!! $section_list -> section_name !!}">{!! $section_list -> section_name !!}</option>
		                @endforeach
		            </select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Save</button>
				</div>

				</form>
			</div>

		</div>
		<div class="col">

			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-list"></i> Class List
			</div>
			
			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">

				@include('inc.create-class-and-ListTable')


			</div>

		</div>
	</div>
</div>


<script type="text/javascript">

    $("#ajax").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "{{route('classinsert')}}",
                dataType: "json",
                data: $('#ajax').serialize(),
                success: function(data){
                    alert("Data Save: " + data);
                    $("#classlist").load(" #classlist");
                    $("#ajax")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });

</script>