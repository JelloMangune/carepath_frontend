<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/user/sidebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/user/dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/user/vaccine.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/user/brgySelect.css') }}" rel="stylesheet"/>
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2eead9cc17.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <title>Vaccine List</title>
</head>
<body>
  @include('user.sidebar')
    <div class="container-sm content mt-4" id="targetclientlist">
        <div class="row mb-2">
            <div class="col-sm" id="infantsTxt">Missed Vaccinations</div>
        </div>
        <div class="row mb-5">
            <!-- <select class="form-select form-select-lg mb-3 selectSize" aria-label=".form-select-lg example">
                <option selected value="1">Lourdes NorthWest</option>
                <option value="2">Ninoy Aquino(Marisol)</option>
                <option value="3">Salapungan</option>
            </select> -->
        </div>
      </div>
      <div class="container-md">
        <div class="table-responsive-lg text-center">
          <table class="table table-striped">
              <thead>
                  <tr class="table-danger">
                      <th scope="col">Barangay</th>
                      <th scope="col">Infant</th>
                      <th scope="col">Birth Date</th>
                      <th scope="col">Vaccine/s</th>
                      <th scope="col">Dose</th>
                      <th scope="col">Vaccination Day</th>
                  </tr>
              </thead>
              <tbody class="table-group-divider">
                  @foreach ($missedVaccination as $vaccination)
                  <tr>
                      <td class="align-middle">{{ $vaccination['barangay_name'] }}</td>
                      <td class="table-secondary align-middle"><b>{{ $vaccination['infant_name'] }}</b></td>
                      <td class="align-middle">{{ $vaccination['birth_date'] }}</td>
                      <td class="table-secondary align-middle">{{ $vaccination['vaccine_name'] }}</td>
                      <td class="align-middle">{{ $vaccination['dose_number'] }}</td>
                      <td class="table-secondary align-middle">{{ $vaccination['vaccination_date'] }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-end mt-4">
            <li class="page-item disabled">
              <a class="page-link paginationTxt">Previous</a>
            </li>
            <li class="page-item"><a class="page-link paginationTxt" href="#">1</a></li>
            <li class="page-item"><a class="page-link paginationTxt" href="#">2</a></li>
            <li class="page-item"><a class="page-link paginationTxt" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link paginationTxt" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
</body>
</html>