<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-pencil-square-o"></i> Create Section
			</div>

			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">
				<form class="btn-submit" id="ajaxsection">
					@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="section_name" required="">
				</div>

				<div class="form-group">
					<label>Capacity</label>
					<input type="text" class="form-control" name="section_capacity">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Add New</button>
				</div>
				</form>

			</div>

		</div>
		<div class="col">

			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-list"></i> Section List
			</div>
			
			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)" id="sectionlist">

				@include('inc.section-listTable')


			</div>

		</div>
	</div>
</div>





<script type="text/javascript">
	$("#ajaxsection").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "{{route('insertsection')}}",
                dataType: "json",
                data: $('#ajaxsection').serialize(),
                success: function(data){
                    alert("Data Save: " + data);
                    $("#sectionlist").load(" #sectionlist");
                    $("#ajaxsection")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });
</script>
