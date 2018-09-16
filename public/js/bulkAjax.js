$(document).ready(function() {


		var ids = [];
		$('select').on('change', function() {
			// alert( this.value );
			if(this.value == "1"){
				ids.push(table.rows({selected:true}).ids());
				// JSON.stringify({ids});
				// console.log(ids);
				$.ajax({
						type: 'POST',
                        url: url,
                        data: JSON.stringify({ids:ids}),
                        // data : ids,
                        // data: {ids: ids, action: 'destroy'},
                        // dataType: 'json',
                        headers: {
                        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
					success: function(result) {
				        console.log(result);
				    },
				    error: function(log) {
				        // handle error
				    }
				});
				// alert('Selected rows id: ' + data[0]);
			}
			if(this.value == "2"){
				alert('sort function called');
			}
			// var data = table.rows({selected:true}).data();
			// alert('Selected rows are: ' + data.length);
		});
		
	});