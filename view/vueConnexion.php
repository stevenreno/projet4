<p><?php echo $message ?></p>
<form action="index.php?action=connexion" method='post'>
<table>
  <tr>
    <td>Pseudo :</td>
    <td><input type="text" name="pseudo" maxlength="250"></td>
  </tr>
  <tr>
    <td>Mot de passe</td>
    <td><input type="password" name="mot_de_passe" maxlength="10"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Connexion"></td>
  </tr>
</table>
</form>