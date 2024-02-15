<div>
    @include('livewire.admin.modals.subscription_modal')

    <div class="container narrow py-5">
        <div class="row p-3">
        <!--Title-->
        <h4 class="kcolor text-center mb-5">Subscriptions</h4>

        <div class="col-md-12 pb-4">
            <div class="card border-0 shadow">
                <div class="card-header border-0 py-3">
                    <div class="row d-flex flex-column flex-sm-row align-items-center">
                        <div class="col">
                          <h6 class="my-auto mb-md-0 mb-3"><strong>Total Subscriptions: </strong> {{ $subscriberCount }}</h6>
                        </div>
                        <div class="col-md-4 my-auto">
                            @if ($subscriberCount > 0)
                                <!--<button type="button" class="btn btn-success" onclick="exportToCSV('subscriptionlist')"><i class="fas fa-file-csv fa-lg"></i> <span class="d-none d-md-inline">Export</span></button>-->
                                <form class="my-auto" wire:submit.prevent="getSubscriptionList">
                                    <div class="input-group">
                                        <select class="form-select" wire:model="table_id" required>
                                          <option selected value="">Select List</option>
                                          <option value="activesubscriptions">Active Subscriptions ({{$ActiveSubscribers}})</option>
                                          <option value="inactivesubscriptions">Inactive Subscriptions ({{$subscriberCount - $ActiveSubscribers}})</option>
                                        </select>
                                        <button class="btn btn-success" type="submit">
                                            <i class="fas fa-file-csv fa-lg"></i> Export
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="card-body border-0">

                    <div class="table-responsive">
                        <div class="">

                            <div class="form-floating mb-3">
                                <input id="search" type="text" class="form-control"  wire:model="search" placeholder="Search..." >
                                <label for="search" class="px-4">Search...</label>
                            </div>
                        </div>
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <table class="table table-striped table-hover" id="subscriptionlist">
                            <thead>
                                <tr>
                                <th scope="col" class="ps-3">Email Address</th>
                                <th scope="col" class="ps-3">Subscription Date</th>
                                <th scope="col" class="ps-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subscribers as $subscriber)
                                    <tr>
                                        <td class="ps-3">
                                            {{$subscriber->email}}
                                            @if($subscriber->status == 0)
                                                <span class="badge text-bg-danger">Unsubscribed</span>
                                            @endif
                                        </td>
                                        <td class="ps-3"> {{$subscriber->created_at}} </td>
                                        <td class="ps-3 text-end">
                                            @if($subscriber->status == 0)
                                                <a href="#" wire:click="activateSubscription({{ $subscriber->id }})" class="btn btn-sm btn-success me-2">
                                                    <i class="fas fa-check"></i> <span class="d-none d-md-inline">Reactivate</span>
                                                </a>
                                            @else
                                                <a href="#" wire:click="deactivate({{ $subscriber->id }})" class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#deactivateSubscriptionModal">
                                                    <i class="fas fa-ban"></i> <span class="d-none d-md-inline">Deactivate</span>
                                                </a>
                                            @endif
                                        </td>
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

                    <!--ACTIVE SUBSCRIPTIONS-->
                    <table class="table table-striped table-hover d-none" id="activesubscriptions">
                        <thead>
                            <tr>
                            <th scope="col" class="ps-3">Email Address</th>
                            <th scope="col" class="ps-3">Subscription Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $activesubscriber)
                                @if($activesubscriber->status == 1)
                                    <tr>
                                        <td class="ps-3">
                                            {{$activesubscriber->email}}
                                        </td>
                                        <td class="ps-3"> {{$activesubscriber->created_at}} </td>
                                    </tr>
                                @endif
                            @empty
                            @endforelse
                        </tbody>
                    </table>

                    <!--INACTIVE SUBSCRIPTIONS-->
                    <table class="table table-striped table-hover d-none" id="inactivesubscriptions">
                        <thead>
                            <tr>
                            <th scope="col" class="ps-3">Email Address</th>
                            <th scope="col" class="ps-3">Subscription Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $inactivesubscriber)
                                @if($inactivesubscriber->status == 0)
                                    <tr>
                                        <td class="ps-3">
                                            {{$inactivesubscriber->email}}
                                        </td>
                                        <td class="ps-3"> {{$inactivesubscriber->created_at}} </td>
                                    </tr>
                                @endif
                            @empty
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        </div>
    </div>

</div>


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
    <script>
        window.addEventListener('close-modal', event => {
            $('#deactivateSubscriptionModal').modal('hide');
        });

        window.addEventListener('download-list', event => {
            const tableId = event.detail.table_id;
            exportToCSV(tableId);

            function exportToCSV(tableId) {
                const table = document.querySelector(`#${tableId}`);
                const csv = toCSV(table);
                const timestamp = new Date().toISOString().replace(/[-T:\.Z]/g, '');
                const filename = `korrency_${tableId}_${timestamp}.csv`;
                downloadFile(csv, 'csv', filename);
            }

            function toCSV(table) {
                const t_rows = table.querySelectorAll('tr');
                return [...t_rows].map(row => {
                    const cells = row.querySelectorAll('th, td');
                    return [...cells].map(cell => cell.textContent.trim()).join(',');
                }).join('\n');
            }

            function downloadFile(data, fileType, fileName = '') {
                const a = document.createElement('a');
                a.download = fileName;
                const mime_types = {
                    'json':'application/json',
                    'csv':'text/csv',
                    'excel': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                }
                a.href = `
                    data:${mime_types[fileType]};charset=utf-8,${encodeURIComponent(data)}
                `;
                document.body.appendChild(a);
                a.click();
                a.remove();
            }
        });

    </script>
@endsection
