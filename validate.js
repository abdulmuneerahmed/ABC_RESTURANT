var itemvalue,quantityvalue,amountvalue;
                $(document).ready(function(){
                        
                        $('select.list').change(function(){
                                $('#error').empty();
                                let itemtype=  $('.list').val();
                                if(itemtype == 'Tea' || itemtype =='Coffee'){
                                        itemvalue =10;
                                }       
                                else{
                                        itemvalue = 15;
                                }                       
                        });
                        
                         $(".quantity").keyup(function(){
                                $('select.list').change(function(){
                                        $(".quantity, #amount").val("");
                                });
                               quantityvalue = $(this).val();
                               let Totalamount = itemvalue * quantityvalue;                          
                               if(Totalamount > 0){
                                $('#amount').val(Totalamount);
                               }else{
                                $('#amount').val('');
                               }
                               
                         });
                        
                        $('#button').click(function(){
                                var item = $('.list').val();
                                var quantity = $('.quantity').val();
                                var amount = $('#amount').val();
                                if(item !="" && quantity !="" && amount!=""){
                                        $.post(
                                                "submit.php",
                                                {
                                                        item : item,
                                                        quantity : quantity,
                                                        amount : amount
                                                },
                                                function(data,status){
                                                        if(data =="success"){
                                                                let option = $('option');
                                                                $('.list').val(option[0]);
                                                                $(".quantity, #amount").val("");
                                                                $('#error').html("<span style='color:green;' class='text-danger'>Successfull</span>");
                                                        }
                                                        else{
                                                                let option = $('option');
                                                                $('.list').val(option[0]);
                                                                $(".quantity, #amount").val("");
                                                                console.log(data);
                                                                $('#error').html("<span style='color:red;' class='text-danger'>Error in submission</span>");
                                                        }
                                                }
                                        );
                                }
                                else{
                                        $('#error').html("<span style='color:red;' class='text-danger'>All fields required</span>");
                                }
                                
                        });
                });