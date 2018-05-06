let index={};

index.button_1_Click = function(){
    const argumentList = arguments?arguments:['Empty!'];
    $.post(
        "index_action.php",
        {jobType:'button_1_Clicked', argumentList: argumentList},
        function (data) {
            if(!data){
                //alert('Something wrong! No data arrived from server!');
                console.log('Something wrong! No data arrived from server!');
            }else{
                var receivedData = JSON.parse(data);
                //alert(receivedData.argumentList);
                console.log(receivedData.argumentList);


            }
        }
    );
}









jQuery(function($) {
$('#button_1').on('click',index.button_1_Click);
});