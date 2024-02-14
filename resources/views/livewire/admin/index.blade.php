<div class="container narrow py-5">
    <div class="row p-3">
      <!--Title-->
      <h4 class="kcolor text-center mb-5">Subscriptions</h4>

      <div class="col-md-12 pb-4">
        <div class="card border-0 shadow">
            <div class="card-header border-0 py-3">
                <strong>Total Subscriptions: </strong> {{ $subscriberCount }}
            </div>

            <div class="card-body border-0">

                <div class="table-responsive">
                    <div class="">

                        <div class="form-floating mb-3">
                            <input id="search" type="text" class="form-control"  wire:model="search" placeholder="Search..." >
                            <label for="search" class="px-4">Search...</label>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col" class="ps-3">Email Address</th>
                            <th scope="col" class="ps-3">Subscription Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $subscriber)
                                <tr>
                                    <td class="ps-3"> {{$subscriber->email}} </td>
                                    <td class="ps-3"> {{$subscriber->created_at}} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-danger text-center">No Subscribers Found</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $subscribers->links() }}
                </div>

            </div>
        </div>
      </div>


    </div>
  </div>
