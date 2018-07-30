<div class="members-navigation">
  <ul class="nav nav-members">
    <li class="nav-item <?= $page == 'member/index' ? 'active' : '' ?>">
      <a class="nav-link " href="/members/index.php">ADD NEW PACKAGE</a>
    </li>
    <li class="nav-item <?= $page == 'member/package-expected' ? 'active' : '' ?>">
      <a class="nav-link active" href="/members/packages_expected.php">PACKAGES EXPECTED</a>
    </li>
    <li class="nav-item <?= $page == 'member/package-received' ? 'active' : '' ?>">
      <a class="nav-link active" href="/members/packages_received.php">PACKAGES RECEIVED </a>
    </li>
    <li class="nav-item <?= $page == 'member/package-send' ? 'active' : '' ?>">
      <a class="nav-link active" href="/members/packages_sent.php">PACKAGES SENT</a>
    </li>
    <li class="nav-item <?= $page == 'member/account' ? 'active' : '' ?>">
      <a class="nav-link active" href="/members/edit_account.php">ACCOUNT</a>
    </li>
    <li class="nav-item <?= $page == 'member/extra-services' ? 'active' : '' ?>">
      <a class="nav-link active" href="/members/extra_services.php">EXTRA SERVICES</a>
    </li>

  </ul>
</div>
