<div class="relative overflow-x-auto shadow-md">
    <table class="w-full border-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead {{ $attributes->merge(['text-xs text-white-700 uppercase bg-gray-50 ']) }}>
            {{ $thead }}
        </thead>
        <tbody>
            {{ $tbody }}
            {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            </tr> --}}
        </tbody>
        {{-- <tfoot>
            {{ $tfoot }}
            {{-- <tr class="font-semibold text-gray-900 dark:text-white">
                <th scope="row" class="px-6 py-3 text-base">Total</th>
                <td class="px-6 py-3">3</td>
                <td class="px-6 py-3">21,000</td>
            </tr>
        </tfoot> --}}
    </table>
</div>
