@extends('admin.layouts.app', [
    'pageName' => 'Tables'
])

@section('content')

    <!-- Auto Tables -->
    <section class="auto-tables p-6 md:p-8 -mt-16">
        <article class="w-full px-6 md:px-8 py-8 md:py-12 rounded-lg bg-white shadow-lg overflow-scroll">
			<h2 class="text-2xl font-hairline font-sans mb-6">Example Table</h2>

            <table class="">
                <thead class="text-gray-600">
                    <tr class="border-b border-gray-200">
                        @foreach (config('lartisan.tableData.headings') as $heading)
                            <th class="px-4 py-2 font-hairline text-lg text-red-600">{{ __($heading) }}</th>
                        @endforeach
                        <th class="w-2/12 px-4 py-2 font-hairline text-lg text-red-600">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (config('lartisan.tableData.content') as $rowData)
                        <x-table-row :id="$loop->iteration" :width="'w-auto'" :person="$rowData" />
                    @endforeach
                </tbody>
            </table>

        </article>
    </section> <!-- ./ Auto Tables -->

@endsection
