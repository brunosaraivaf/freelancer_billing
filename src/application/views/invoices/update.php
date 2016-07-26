<!-- Page header -->

<div class="page-header">

	<div class="page-title">

		<h3>

			<?=$this->lang->line('update').' '.$this->lang->line('invoice')?>
			
		</h3>

	</div>

</div>

<!-- /page header -->

<div class="row page-subheader">

	
	
	
</div>	
	
<form method="post" action="" class="form-horizontal" autocomplete="on" role="form" enctype="multipart/form-data">

	

	<div class="form-group">

		<label class="col-sm-3 control-label">

			<?=$this->lang->line('invoice_account_id')?>

		</label>

		<div class="col-sm-9">


			<?=number_field('invoice_account_id', set_value('invoice_account_id', $item->invoice_account_id));?>

			</div>

	</div>

	<div class="form-group">

		<label class="col-sm-3 control-label">

			<?=$this->lang->line('invoice_amount')?>

		</label>

		<div class="col-sm-9">


			<?=number_field('invoice_amount', set_value('invoice_amount', $item->invoice_amount), 0.01);?>

			</div>

	</div>

	<div class="form-group">

		<label class="col-sm-3 control-label">

			<?=$this->lang->line('invoice_description')?>

		</label>

		<div class="col-sm-9">


			<?=input_field('invoice_description', set_value('invoice_description', $item->invoice_description));?>

			</div>

	</div>

	<div class="form-group">

		<label class="col-sm-3 control-label">

			<?=$this->lang->line('invoice_due_date')?>

		</label>

		<div class="col-sm-9">


			<?=datetime_field('invoice_due_date', set_value('invoice_due_date', $item->invoice_due_date), 0);?>

			</div>

	</div>

	<div class="form-group">

		<label class="col-sm-3 control-label">

			<?=$this->lang->line('invoice_paid_date')?>

		</label>

		<div class="col-sm-9">


			<?=datetime_field('invoice_paid_date', set_value('invoice_paid_date', $item->invoice_paid_date), 0);?>

			</div>

	</div>




	<div class="row">
		
		<div class="col-sm-9 col-sm-offset-3 col-xs-12">
		
			<div class="row">
		
				<div class="col-xs-6">
				
					<a class="btn btn-block btn-default" href="<?=base_url()?>invoices/view/<?=$item->invoice_id?> " >

						<?=$this->lang->line('cancel')?>
						
					</a>

				</div>
				
				<div class="col-xs-6">

				
					<button type="submit" class="btn btn-primary btn-block">

						<?=$this->lang->line('update').' '.$this->lang->line('invoice')?>

					</button>		

				</div>		
			
			</div>		
			
		</div>			
		
	</div>
	
	<input type="hidden" name="referer_query_string" value="<?=get_referer_query_string()?>">

</form>   
