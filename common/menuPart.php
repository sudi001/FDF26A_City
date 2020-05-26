<?php
echo "<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>";

$this->load->library('ion_auth');
$username = $this->session->userdata('email');

$css_url = base_url('/css/bootstrap.min.css');
$home_url = base_url('/cities');
$uploads_url = base_url('/uploads');
$auth_url = base_url('/auth');

echo "<link rel =\"stylesheet\" href =\"$css_url\" type=\"text/css\">";

echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\">Város nyilvántartó rendszer</a>
  

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"$home_url\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Vezérlőpult
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">";

if ($this->ion_auth->is_admin())
{
    echo "<a class=\"dropdown-item\" href=\"$auth_url\">Felhasználók kezelése</a>";
}
 else {
    echo "<a class=\"dropdown-item\">Ön nem jogosult a vezérlőpult elérésére</a>";
}

echo"
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\">Jelnlegi felhasználó: " . $username . "</a>\n
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"$auth_url/logout\">Kijelentkezés</a>\n
      </li>
      
    </ul>
  </div>
</nav>";
?>