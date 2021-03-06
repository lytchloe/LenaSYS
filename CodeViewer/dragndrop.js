$(function() {
	$( "#sequenceSelector" ).change(function() {
		seqID = $(this).val();
		$("#SeqEdit").load("dragndrop.php?courseid="+courseID+"&seqid="+seqID+"");
	});
	
	var emptySort = "<div class='empty'>No items.</div>";
    var emptyExample = "<div class='empty'>No examples.</div>";

	$( "#sortList, #exampleList" ).sortable({
      connectWith: ".dragAndDrop",
		remove: function(event, ui) {
            if(!$('div', this).length) {
                if(this.id == 'sortList')
                    $(this).append(emptySort);
                else
                    $(this).append(emptyExample);
            }
        },
        receive: function(event, ui) {
            $('.empty', this).remove();
        }
    });
	
	$('.updateSequence').click(function(){
		var postData = $('#sortList').sortable('serialize');
		var seqID = $('#sequenceSelector').val();

		$.post('dragndropService.php?action=update', {list: postData, seqid: seqID, courseid: courseID}, function(o) {
			$( "#status" ).html("Saved!");
		});
	});
	
	$('.newSequence').click(function(){
		$.post('dragndropService.php?action=new', {courseid: courseID}, function(o) {
			 $("#SeqEdit").load("dragndrop.php?courseid="+courseID+"&seqid="+o+"");
			 $( "#status" ).html("New sequence created!");
		});
	
	});
	
	$('.deleteSequence').click(function(){
		var seqID = $('#sequenceSelector').val();
		$.post('dragndropService.php?action=delete', {seqid: seqID, courseid: courseID}, function(o) {
			$("#SeqEdit").load("dragndrop.php?courseid="+courseID+"&seqid="+o+"");
			$( "#status" ).html("Sequence deleted!");
		});
	
	});	
});
