<form action="registrar/valores-fecha" method="POST">

{if $Permiso eq 2}

<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="{$smarty.now|date_format:"%Y-%m-%d"}" 
max="{$smarty.now|date_format:"%Y-%m-%d"}"
 required>
</div>

{else}

<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="{$smarty.now|date_format:"%Y-%m-%d"}" readonly="" required>
</div>


{/if}

<div class="form-group">
<button class="btn btn-lg btn-primary btn-block">
<i class="fa fa-hand-paper-o fa-2x"></i></button>
</div>


</form>