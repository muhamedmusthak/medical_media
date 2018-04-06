<!DOCTYPE html>
<html lang="en">
<head>
<style>



.forcedWidth{
    width:200px;
    word-wrap:break-word;
    display:inline-block;
}

</style>
<?php $this->load->view('include_css'); ?>
</head>
<body>
  <?php $this->load->view('menu_navigation'); ?>

    <link type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" rel="stylesheet" />

     <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2> Sales Return</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                                            <form class="form-horizontal"  role="form" action="<?php echo base_url('index.php/Sales/sales_return_add');?>" method="post" onSubmit="return submitTest()">

                <div class="row">
                        <div class="col-md-12">
                           <div class="panel panel-default">
                                <div class="panel-body">
                                <h3>Add Sales Return</h3>
                               
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
										
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Bill NO</label>
                                                <div class="col-md-8">  
                                                <select name="bill_no" id="bill_no" class="selectpicker form-control " required  data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
                                                        <option value="" disabled selected> SELECT </option>
                                                        <?php foreach($invoice as $row){ ?>    
                                                        <option value="<?php echo $row['s_no']; ?>"> <?php echo $row['bill_no']; ?></option>
                                                        <?php } ?>        
                                                    </select>       	                             
                                                </div>
                                            </div>
                                            
                                            
                                            
                                           <!--  <div class="form-group">                                        
                                                <label class="col-md-4 control-label">Customer Details</label>
                                                <div class="col-md-8" id="cus_det">
                                                    <div class="error" ><?php echo form_error('address1'); ?></div>                                               
                                                </div>
                                            </div> -->
                                          
                                           <!--  <div class="form-group">                                        
                                                <label class="col-md-4 control-label">Remarks<sup  style="color:#f00"> * </sup></label>
                                                <div class="col-md-8">
                                                	<input type="text"  class="form-control "  <?php /*?>required<?php */?> placeholder="Enter Remarks" name="remarks" id="remarks" value="<?php echo set_value('remarks');  ?>" >
                                                    <div class="error" ><?php echo form_error('remarks'); ?></div>                                               
                                                </div>
                                            </div>
                                             -->
                                          
                                            
										</div>
                                        
                                        <div class="col-md-6">
										<div class="form-group">                                        
                                                <label class="col-md-4 control-label">Customer Code<sup  style="color:#f00"> * </sup></label>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="text" id="cus_name" name="cus_name" required readonly>
                                                    <input required type="hidden" id="cus_code" name="cus_code" >
                                                                         
                                                </div>
                                            </div>
										</div>
                                        
                                    </div>
                                    

                                </div>
                                
                           
                            
                            
                            
                			</div>
                            </div>
                            </div>
                       
						 <div class="col-md-15">
							
                            <!-- START DEFAULT DATATABLE -->
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-body" style="width:auto"  >
                                    <div class="table-responsive testid">
                                        <table class="table" id="mytable">
                                            <thead>
                                                <tr>
                                                    <!-- <th width="10%">Product Type<sup style="color:#f00"> * </sup></th> -->
                                                    <th width="6%">Product</th>
                                                    <th width="6%">Batch</th>
                                                    <th width="6%">HSN</th>
                                                    <th width="6%">Manufacturer Name</th>
                                                    <th width="6%">MRP</th>
                                                    <th width="6%">Saled Qty<sup style="color:#f00"> * </sup></th>
                                                    <!-- <th width="6%">SGST Amt<sup  style="color:#f00"> * </sup></th>
                                                    <th width="6%">CGST Amt<sup  style="color:#f00"> * </sup></th>
                                                    <th width="6%">IGST Amt<sup  style="color:#f00"> * </sup></th> -->
                                                    <th width="6%">Return Qty</th>
                                                    <th width="6%">Total</th>
                                                </tr>
											</thead>
                                            <tbody id="testid">
                                        	
											<!-- <tr>
                                            <td  class=""><input type="text" class="form-control" id="pro_name1" name="pro_name[]" /><input type="hidden" class="form-control" id="pro_id1" name="pro_id[]" /><input type="hidden" class="form-control" name="stock_id[]" id="stock_id1" /></td>

                                            <td><input  type="text" required class="form-control  groupOfTexbox" name="batch[]" id="batch1"    required/> </td>

                                            <td ><input  type="text" required class="form-control  groupOfTexbox" name="hsn[]" id="hsn1"    required/><input  type="hidden" required class="form-control  groupOfTexbox" name="hsn_id[]" id="hsn_id1"    required/> </td>

                                            <td><input  type="text" required class="form-control  groupOfTexbox" name="manu_name[]" id="manu_name1"    required/> </td>

                        					<td><input min="0"  type="text" step="any" class="form-control  groupOfTexbox" name="purrate[]" id="purrate1" onchange="totalamt(1);"  required/><input  type="hidden" required class="form-control  groupOfTexbox" name="sgst[]" id="sgst1" onchange="totalamt(1); "  value="0"  required/><br> <input  type="hidden" required class="form-control  groupOfTexbox" name="sgst_amt[]" id="sgst_amt1"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst[]" id="cgst1" onchange="totalamt(1); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst_amt[]" id="cgst_amt1"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="igst[]" id="igst1" onchange="totalamt(1); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="igst_amt[]" id="igst_amt1"    readonly/></td>
                                                                       
                                            <td><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty[]" value="0" id="free_qty1"   required/><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty_ref[]" id="qty_ref1" value="0"  required/><br><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty_ref[]" id="free_qty_ref1" /></td>
                                            
                                            <td style="font-weight:bold;" ><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty[]" id="qty1" onchange="totalamt(1); "   required/><input type="hidden" min="0" step="any" class="form-control groupOfTexbox"  name="discount" style="color:#000"  value="0" id="discount1" onchange="totalamt(1); "></td>
                                            <td><input min="0"  type="text" step="any" class="form-control " name="total[]" id="total1"   readonly/></td>
											</tr> -->
											
										</tbody>
                                        </table>
										<table class="table" width="100%" >
                                         <thead>
                                           <tr>
                                                <td colspan="9" width="75%"><button type="button" style="visibility:hidden;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="opener" ></button></td>
                                                <td style="font-weight:bold;" width="12%">Total</td>
                                                <td style="font-weight:bold;" ><input type="text" class="form-control" name="stotal" style="color:#000" readonly id="stotal"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="9" width="75%"><button type="button" style="visibility:hidden;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="opener" ></button></td>
                                                <td style="font-weight:bold;" width="12%">Grand Total</td>
                                                <td style="font-weight:bold;" ><input type="text" class="form-control" readonly name="gtotal" style="color:#000" id="gtotal"></td>
                                            </tr>
    									</thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->

							<input type="hidden" name="testno" id="testno" value="2">
							<input type="hidden" name="extratax" id="extratax" value="">
							     <div class="panel-footer">                            
                                   <!--  <button class="btn btn-primary pull-left" type="button" style="margin-bottom:20px;" onclick="fnadd()">Add More</button>
                                    <button class="btn btn-warning pull-left" type="button" style="margin-bottom:20px;margin-left:10px;" onclick="fnremove()">Remove</button>   -->
                                  <button class="btn btn-primary pull-right submit" id="submit" type="submit" style="margin-bottom:20px;">Submit</button>
									
                                </div>
                                
                                
                          
						  
                        </div>
                                        
                                    </div>
                                    
                           
                            </form>
</body>



  
 

</html>

     <?php $this->load->view('include_js'); ?>


     <script type="text/javascript">
var names=[];
$('body').on('change','#bill_no',function(){
    var s_no = $(this).val();
    //alert(s_no);
    $.ajax({
        url:"<?php echo base_url() ?>index.php/Sales/get_bill_data/"+s_no,
        type:"POST",
        dataType:"JSON",
        success:function(res){
            console.log(res);
            $('#cus_name').val(res[0]['customer_name']);
             $('#cus_code').val(res[0]['customer_id']);
             $('#testno').val(res.length+1);
             $('.clearfield').remove();
            for (var i = 1; i <= res.length; i++) {
                   var a=i-1;
                 $("#testid").append('<tr class="clearfield"><td class=""><input type="text" class="form-control" id="pro_name'+i+'" name="pro_name[]" /><input type="hidden" class="form-control" id="pro_id'+i+'" name="pro_id[]" /><input type="hidden" class="form-control" name="stock_id[]" id="stock_id'+i+'" /></td>'
                    +'<td><input  type="text" required class="form-control  groupOfTexbox" name="batch[]" id="batch'+i+'"    required/> </td>'

                    +'<td ><input  type="text" required class="form-control  groupOfTexbox" name="hsn[]" id="hsn'+i+'"    required/><input  type="hidden" required class="form-control  groupOfTexbox" name="hsn_id[]" id="hsn_id'+i+'"    required/> </td>'

                    +'<td><input min="0"  type="text" required class="form-control   groupOfTexbox" name="manu_name[]" id="manu_name'+i+'"    required/> </td>'

                    +'<td><input min="0"  type="text" step="any" class="form-control  groupOfTexbox" name="sales_rate[]" id="sales_rate'+i+'" onchange="totalamt('+i+');"  required/><input min="0"  type="hidden" step="any" class="form-control  groupOfTexbox" name="purrate[]" id="purrate'+i+'" onchange="totalamt('+i+');"  required/><input  type="hidden" required class="form-control  groupOfTexbox" name="sgst[]" id="sgst'+i+'" onchange="totalamt('+i+'); "  value="0"  required/><br> <input  type="hidden" required class="form-control  groupOfTexbox" name="sgst_amt[]" id="sgst_amt'+i+'"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst[]" id="cgst'+i+'" onchange="totalamt('+i+'); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst_amt[]" id="cgst_amt'+i+'"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="igst[]" id="igst'+i+'" onchange="totalamt('+i+'); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="igst_amt[]" id="igst_amt'+i+'"    readonly/></td>'

                 +'<td><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty[]" value="0" id="free_qty'+i+'"   required/><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty_ref[]" id="qty_ref'+i+'" value="0"  required/><br><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty_ref[]" id="free_qty_ref'+i+'" /></td>'

               +'<td style="font-weight:bold;" ><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty[]" id="qty'+i+'" onchange="totalamt('+i+'); "   required/><input type="hidden" min="0" step="any" class="form-control groupOfTexbox"  name="discount" style="color:#000"  value="0" id="discount'+i+'" onchange="totalamt('+i+'); "></td>'

               +'<td><input min="0"  type="text" step="any" class="form-control " name="total[]" id="total'+i+'"   readonly/></td>'
                 +'</tr>');

                     $('#pro_id'+i).val(res[a].i_id);
  names.push(parseInt(res[a].i_id));
                    localStorage.setItem("stock", JSON.stringify(names));
                     $('#stock_id'+i).val(res[a].stock_id);
                     $('#pro_name'+i).val(res[a].i_name);
                     $('#batch'+i).val(res[a].batch_num);
                     $('#hsn'+i).val(res[a].hsn_code);
                     $('#hsn_id'+i).val(res[a].hsn_id);
                     $('#manu_name'+i).val(res[a].manu_name);
                     $('#sgst'+i).val(res[a].sgst_sale);
                     $('#cgst'+i).val(res[a].cgst_sale);
                     $('#igst'+i).val(res[a].igst_sale);
                     $('#sgst_amt'+i).val(res[a].sgst_sale_amt);
                     $('#cgst_amt'+i).val(res[a].cgst_sale_amt);
                     $('#igst_amt'+i).val(res[a].igst_sale_amt);
                     var rate1 =  parseFloat(res[a].sales_price)/100;
                     var tax = parseFloat(parseFloat(parseFloat(res[a].sgst_sale)+parseFloat(res[a].cgst_sale)+parseFloat(res[a].igst_sale))*rate1);
                     var rate = parseFloat(res[a].sales_price)+parseFloat(tax);
                     $('#sales_rate'+i).val(rate);
                     $('#purrate'+i).val(res[a].sales_price);
                     $('#qty_ref'+i).val(res[a].quantity);
                     $('#qty'+i).val(0);
                     totalamt(i);
            };
        }
    });
});

/*function fnadd() {
		var a=$("#testno").val();
		num=parseInt(a) + 1;
		$("#testno").val(num);
		
		$("#testid").append('<tr><td  class=""><input type="text" class="form-control" id="pro_name1" name="pro_name[]"><input type="hidden" class="form-control" id="pro_id1" name="pro_id[]"><input type="hidden" class="form-control" name="stock_id[]" id="stock_id1"></td><td><input  type="text" required class="form-control  groupOfTexbox" name="batch[]" id="batch1"    required/> </td>'

		+'<td><input  type="text" required class="form-control  groupOfTexbox" name="hsn[]" id="hsn'+a+'"    required/><input  type="hidden" required class="form-control  groupOfTexbox" name="hsn_id[]" id="hsn_id'+a+'"    required/> </td>'
        +'<td><input  type="text" required class="form-control  groupOfTexbox" name="manu_name[]" id="manu_name'+a+'"    required/> </td>'
		
		+'<td><input min="0"  type="text" step="any" class="form-control  groupOfTexbox" name="purrate[]" id="purrate1" onchange="totalamt(1);"  required/><input  type="hidden" required class="form-control  groupOfTexbox" name="sgst[]" id="sgst1" onchange="totalamt(1); "  value="0"  required/><br> <input  type="hidden" required class="form-control  groupOfTexbox" name="sgst_amt[]" id="sgst_amt1"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst[]" id="cgst1" onchange="totalamt(1); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="cgst_amt[]" id="cgst_amt1"    readonly/><input   type="hidden" required class="form-control  groupOfTexbox" name="igst[]" id="igst1" onchange="totalamt(1); " value="0"   required/><br><input   type="hidden" required class="form-control  groupOfTexbox" name="igst_amt[]" id="igst_amt1"    readonly/></td>'
				+'<td><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty[]" id="free_qty'+a+'" value="0" required/><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty_ref[]" id="qty_ref'+a+'"  required/><br><input min="0"  type="hidden" class="form-control  groupOfTexbox" name="free_qty_ref[]" id="free_qty_ref'+a+'"   required/></td>'
				
				+'<td style="font-weight:bold;" ><input min="0"  type="text" class="form-control  groupOfTexbox" name="qty[]" id="qty'+a+'" onchange="totalamt('+a+'); "   required/><br><input type="hidden" min="0" step="any" class="form-control groupOfTexbox"  name="discount[]" style="color:#000"  value="0" id="discount'+a+'" onchange="totalamt('+a+')"></td>'
				+'<td><input min="0"  type="text" step="any" class="form-control " name="total[]" id="total'+a+'"  readonly/></td></tr>');
				
			
			$(".selectpicker").selectpicker('refresh');
			$(".groupOfTexbox").keypress(function (event) {
		 			  		return isNumber(event, this)
						}); 
	}
	
	
	function fnremove() {
		var a=$("#testno").val();
		if(a>=3){
			num=parseInt(a) - 1;
			$("#testno").val(num);
			$('#mytable tr:eq('+num+')').remove();
		}
	} */
/*$(document).on('change','.item',function()
{
		var cus = $(this).val();
		//alert(cus);
		var id= $(this).attr('id');
		sid = id.split('_');
		id = sid[1];
		//alert(id);
	    //alert("DO You Want To Go For The New Purchse?");
	if(cus!='')
	{
		$.ajax(
		{
			url:'<?php echo base_url('index.php/Sales/get_all_det');?>',
			type:'POST',
			data:{cus:cus},
			success: function(result)
			{
				var obj = jQuery.parseJSON(result);
				//alert('obj');
					//$('#seriel_no'+id).val(obj.serial);
					//$('#descr'+id).val(obj.descr);
					$('#ids'+id).val(obj.qty);
					$('#purrate'+id).val(obj.purrate);
				
			}
		});
		
	}
});*/
function totalamt(item){
		//alert('to');

        var purrate=parseFloat($('#purrate'+item).val());
        //var purtax=$('#purtax'+item).val();
        var qty=parseFloat($('#qty'+item).val());
        var qty_ref=parseFloat($('#qty_ref'+item).val());
        var free_qty_ref =parseFloat($('#free_qty_ref'+item).val());
        var sgst=parseFloat($('#sgst'+item).val());
		var cgst=parseFloat($('#cgst'+item).val());
		var igst=parseFloat($('#igst'+item).val());
        var discount=parseFloat($('#discount'+item).val());
        if(qty_ref >= qty){
            

            if(!isNaN(purrate) && !isNaN(qty)){
                    //  var tax=(parseFloat(purrate)/100)*parseFloat(purtax);
                    //  var total=(parseFloat(purrate)+parseFloat(tax))*parseFloat(qty);                    
                            var total=(parseFloat(purrate))*parseFloat(qty);
                            var sgstamt  = parseFloat(( total * parseFloat(sgst))/100);
                            var cgstamt  = parseFloat(( total * parseFloat(cgst))/100);
                            var igstamt  = parseFloat(( total * parseFloat(igst))/100);
                            var discount_sale  = parseFloat(( total * parseFloat(discount))/100);
                           // var free_call = parseFloat((parseFloat(free_qty_ref))/(parseFloat(qty)));
                            $("#sgst_amt"+item).val(sgstamt);
                            $("#cgst_amt"+item).val(cgstamt);
                            $("#igst_amt"+item).val(igstamt);
                          // $("#free_qty"+item).val(free_call.toFixed());
                            gtotal = parseFloat(total+sgstamt+cgstamt+igstamt-discount_sale);
                            if(isNaN(total)){ $("#total"+item).val(0); } else {
                                $("#total"+item).val(gtotal);
                                gtotal1();
                            }
                    }else{
                            $("#total"+item).val(0);
                            
                    }
        }else{
            alert();
            $('#qty'+item).val('');
            $('#qty'+item).focus();

        }
        


    }

    function gtotal1(){
        var a=$("#testno").val();
        a=a-1;
        var gt=0;
		 var gt1=0;
        for(i=1;i<=a;i++){
			var purrate=parseFloat($('#purrate'+i).val());
        	var qty=parseFloat($('#qty'+i).val());
	        var sgst=parseFloat($('#sgst'+i).val());
		    var cgst=parseFloat($('#cgst'+i).val());
		    var igst=parseFloat($('#igst'+i).val());
            var discount=parseFloat($('#discount'+i).val());
			
	   		var total=(parseFloat(purrate))*parseFloat(qty);
			var sgstamt  = parseFloat(( total * parseFloat(sgst))/100);
			var cgstamt  = parseFloat(( total * parseFloat(cgst))/100);
			var igstamt  = parseFloat(( total * parseFloat(igst))/100);
            var discount_sale  = parseFloat(( total * parseFloat(discount))/100);
			//var taxamt  = parseFloat(( total * parseFloat(vat))/100);
               // var total=$('#total'+i).val();
			   var gt=parseFloat(gt)+parseFloat(total);
				var gt1=parseFloat(gt1)+parseFloat(sgstamt)+parseFloat(cgstamt)+parseFloat(igstamt)-parseFloat(discount_sale);
                //var total=$('#total'+i).val(gt1);
                
        }
       
		var stotal = gt;
		var gtot = gt1;
        //alert(stotal);
		if(stotal == '')
			{
				stotal = '00.00';
			}
        
        if(stotal!=''){
            $("#stotal").val(stotal);
            
				gtotal = parseFloat(stotal+gtot);
				
				
					$("#gtotal").val(parseFloat(gtotal).toFixed(2));
					
			}
            




        else{
            $("#stotal").val('00.00');
            $("#taxamount").val('00.00');
            $("#gtotal").val('00.00');
        }
    }
	
/*$('#cus_code').on('change',function()
{
	var cus = $(this).val();
	//alert(cus);
	if(cus!='')
	{
		$.ajax(
		{
			url:'<?php echo base_url('index.php/Sales/get_cus_det');?>',
			type:'POST',
			data:{cus:cus},
			success: function(result)
			{
				$('#cus_det').html(result);
				
			}
		});
	}
});*/




 $(document).on('focus','.datepickerr',function() 
  {
    $( ".datepickerr" ).datepicker();
  });






</script>