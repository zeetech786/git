var empRecords = $('#myTable').DataTable({
    "lengthChange": false,
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
        url:"process.php",
        type:"POST",
        data:{action:'listEmp'},
        dataType:"json"
    },
    "columnDefs":[
        {
            "targets":[0, 6, 7],
            "orderable":false,
        },
    ],
    "pageLength": 10
});