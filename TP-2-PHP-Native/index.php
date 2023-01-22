<!DOCTYPE html>
<html>
    <head>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TP2 PHP Native</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<?php 
  require_once("migration-seeder.php");
  require_once("data.php")
?>
<body>
  <section class="container" id="PageListUser">
    <h1>List User</h1>
    <table class="table">
      <thead>
          <th class="p-1">No.</th>
          <th class="p-1">Name</th>
          <th class="p-1">Email</th>
          <th class="p-1">DOB</th>
          <th class="p-1">Role</th>
          <th class="p-1">Role Description</th>
          <th class="p-1">Action</th>
      </thead>
      <tbody>
        <?php foreach ($dataKaryawan as $data): ?>
          <tr>
            <td class="p-1"><?php echo $data['id']; ?></td>
            <td class="p-1"><?php echo $data['name']; ?></td>
            <td class="p-1"><?php echo $data['email']; ?></td>
            <td class="p-1"><?php echo $data['dateOfBirth']; ?></td>
            <td class="p-1"><?php echo $data['roleName']; ?></td>
            <td class="p-1"><?php echo $data['description']; ?></td>
            <td class="p-1">
              <button style="cursor: not-allowed;" class="btn btn-warning m-1" >Update</button>
              <br/>
              <button style="cursor: not-allowed;" class="btn btn-danger m-1"  >Delete</button>
            </td>
          </tr>
       <?php endforeach; ?>
      </tbody>
    </table>
  </section>
</body>