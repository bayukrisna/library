

<div class="box">
<table class="table">
  <tr>
    <th> Assets </th>
    <th> Deny </th>
    <th> Allow </th>
  </tr>
  <tr>
    <td>View</td>
    <td><input type="radio" name="view" <?php if($cek->v_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="" <?php if($cek->v_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Create</td>
    <td><input type="radio" name="" <?php if($cek->c_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="" <?php if($cek->c_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Edit</td>
    <td><input type="radio" name="" <?php if($cek->u_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="" <?php if($cek->u_bar == '1') echo 'checked=""' ?>></td>
  </tr>
  <tr>
    <td>Delete</td>
    <td><input type="radio" name="" <?php if($cek->d_bar == '0') echo 'checked=""' ?>></td>
    <td><input type="radio" name="" <?php if($cek->d_bar == '1') echo 'checked=""' ?>></td>
  </tr>
</table>
</div>
<button class="btn btn-success pull-right"> Save </button>