$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
    //alert("111");
});

$("div.alert").hide(4000);

function confirmDelete (msg) {
	if (window.confirm(msg)){
		return true;
	}
	return false;
}