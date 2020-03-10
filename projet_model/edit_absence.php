<?php 
include("functions.php");
$etudiants=all("etudiant");
$absence=find($_GET['id'],'absence');
$etudiant_absent=find($absence['etudiant_id'],"etudiant");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificaityon absence de <?=$etudiant_absent['nomprenom']?></title>
    <?php include ("_css.php");?>
</head>
<body>
    <?php include ("_menu.php");?>

<?php  echo  random_int(1,12)?>
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Modification   d'absence de <?=$etudiant_absent['nomprenom']?> :</h3>
<div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=absence&a=update" method="post">
   <input type="hidden" name="id" value="<?=$absence['id']?>">
      <div class="form-group">
      <label for="date_absence ">
      date D'absence : </label>
         
            <input  value="<?=$absence['date_absence']?>" type="text" class="form-control" name="date_absence" id="date_absence" >
            </div>
            <div class="form-group">
      <label for="nombreHeure  ">
      nombre D'heure  : </label>
         
            <input value="<?=$absence['nombreHeure']?>" type="number" class="form-control" name="nombreHeure" id="nombreHeure">
            </div>
            <div class="form-group">
      <label for="matiere">
      matiere  : </label>
         
            <input value="<?=$absence['matiere']?>" type="text" class="form-control" name="matiere" id="matiere">
            </div>
            <div class="form-group">
      <label for="etudiant_id">
      Etudiant  : </label>
         
            <select type="text" class="form-control" name="etudiant_id" id="etudiant_id">
        <option value="">....</option>
        <?php foreach($etudiants as $e) {  ?>
<?php 
$selected="";
if($e['id']==$absence['etudiant_id']){
    $selected="selected";
}
    
    
?>

        <option <?=$selected?> value="<?=$e['id']?>" ><?=$e['nomprenom']?></option>
        <?php } ?>
        </select>
            </div>
            <div class="form-group">
            <button class="btn btn-primary">Modifier Absence</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>