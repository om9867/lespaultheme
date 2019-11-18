<?php
/* Template Name: PayU Money  */

$MERCHANT_KEY = "1gsfsDe2";
$SALT = "Bdbs64Fl2I";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
if(!empty($_POST)) {
foreach($_POST as $key => $value) {
$posted[$key] = $value;
}
}
$formError = 0;
if(empty($posted['txnid'])) {
/* Generate random transaction id */
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
$txnid = $posted['txnid'];
}
$hash = '';
/* Hash Sequence */
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
if(
empty($posted['key'])
|| empty($posted['txnid'])
|| empty($posted['amount'])
|| empty($posted['firstname'])
|| empty($posted['email'])
|| empty($posted['phone'])
|| empty($posted['productinfo'])
|| empty($posted['surl'])
|| empty($posted['furl'])
|| empty($posted['service_provider'])
) {
$formError = 1;
} else {

$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';
foreach($hashVarsSeq as $hash_var) {
$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
$hash_string .= '|';
}
$hash_string .= $SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';
}
} elseif(!empty($posted['hash'])) {
$hash = $posted['hash'];
$action = $PAYU_BASE_URL . '/_payment';
}
?>

<?php get_header(); ?>

<body onload="submitForm()">
<div class="payu_page page_content_wrapper">
	<section class="payu_sec">
		<div class="container">
			<div class="form_cont payu_form">
				<?php if ($formError) { ?>
				    <span style="color:red">All fields are mandatory.</span>
				    <br/>
				<?php } ?>
				<form id="payu-form" action="<?php echo $action; ?>" method="post" name="payuForm" class="form clearfix form-horizontal">
					<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
					<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
					<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
					<div class="form-group">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4 col-md-3"><label>Amount:</label></div>
								<div class="col-sm-6"><input class="form-control" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4 col-md-3"><label>First Name:</label></div>
								<div class="col-sm-6"><input class="form-control" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4 col-md-3"><label>Email:</label></div>
								<div class="col-sm-6"><input class="form-control" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4 col-md-3"><label>Phone:</label></div>
								<div class="col-sm-6"><input class="form-control" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<div class="row">
								<div class="col-sm-4 col-md-3"><label>Product Info:</label></div>
								<div class="col-sm-6"><textarea name="productinfo" class="form-control"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 btn_cont">
							<input type="hidden" name="surl" value="https://www.orangemantra.com/success" size="64" />
							<input type="hidden" name="furl" value="https://www.orangemantra.com/error" size="64" />
							<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
							<?php if(!$hash) { ?>
							<input class="payu_submit" type="submit" value="Submit" />
							<?php } ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<!-- <div class="container_n">
<form action="<?php echo $action; ?>" method="post" name="payuForm">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<table>
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
<td>Phone: </td>
<td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
</tr>
</table>
<div class="clear"></div>
<input type="hidden" name="surl" value="http://www.orangemantra.com/success" size="64" />
<input type="hidden" name="furl" value="http://www.orangemantra.com/success" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
<?php if(!$hash) { ?>
<input type="submit" value="Submit" />
<?php } ?>

</form>

</div> -->

<?php get_footer(); ?>

<?php if(!empty($hash)){?>
<script>
jQuery('#payu-form').submit();
</script>
<?php }?>