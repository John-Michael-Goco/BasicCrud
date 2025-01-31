<table id="agentTable" class="table table-hover table-dark" style="width:100%">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Recruits</th>
        <th>Approved</th>
        <th>Pending</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = 'SELECT * FROM `agents` WHERE agentStatus != "Inactive" AND agentID != "1"';
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><img src="AgentImgs/<?php echo $row['agentImg']; ?>" alt="Agent Image" class="agentImage"></td>
          <td><?php echo $row['agentName']; ?></td>
          <td><?php echo $row['recruits']; ?></td>
          <td><?php echo $row['approved']; ?></td>
          <td><?php echo $row['pending']; ?></td>
          <td>
            <a class="btn btn-success" href="ViewAgent.php?agentID=<?php echo $row['agentID']; ?>" data-toggle="tooltip" title="View">
              <i class="bi bi-eye-fill"></i>
            </a>
            <a class="btn btn-primary" href="EditAgent.php?agentID=<?php echo $row['agentID']; ?>" data-toggle="tooltip" title="Edit">
              <i class="bi bi-pencil-fill"></i>
            </a>
            <a class="btn btn-danger" href="AdminConfig/RemoveAgentquery.php?agentID=<?php echo $row['agentID']; ?>" data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure you want to remove this agent?');">
              <i class="bi bi-trash3"></i>
            </a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Recruits</th>
        <th>Approved</th>
        <th>Pending</th>
        <th>Actions</th>
      </tr>
    </tfoot>
  </table>