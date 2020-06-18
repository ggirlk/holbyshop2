<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th></th>
                  <th>
                    SKU
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Quantity
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Image
                  </th>
                  <th>
                    Action
                  </th>
                </thead>
                <tbody>
                @foreach($prods as $prod)                
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      {{$prod->sku}}
                    </td>
                    <td>
                      {{$prod->name}}
                    </td>
                    <td>
                      {{$prod->quantity}}
                    </td>
                    <td>
                      {{$prod->sellPrice}}
                    </td>
                    <td class="text-primary">
                      <img src='{{ "../../admin/imgs/".$prod->img1}}' class="img-thumbnail" style="width: 100px" alt="">
                    </td>
                    <td>
                     2
                    </td>
                    
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>