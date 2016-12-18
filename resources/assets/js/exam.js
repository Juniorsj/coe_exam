$(document).ready(function() {
    $(':input').on('focus', function() {
      var id = this.id;
        $('#' + id).focusout(function(){
            var no = $('#' + id).data('no');
            if($('#' + id).val() == $('#' + id).data('answer')) {
                document.getElementById('correct' + no).style.display = 'inline';
            } else {
                document.getElementById('correct' + no).style.display = 'none';

            }
        })
    })
});
