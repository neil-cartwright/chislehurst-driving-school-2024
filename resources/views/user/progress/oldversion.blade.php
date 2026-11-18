<!--  php version -->

<form action="/admin/customer/{{ $customer->id }}/progress" method="POST">
    @csrf
    @foreach ($data as $key => $item)
        <table class="table is-bordered has-text-centered">
            <thead>
                <tr>
                    <th class="has-text-centered">{{ ucfirst($key) }}</th>
                    <th>Introduced</th>
                    <th>Helped</th>
                    <th>Prompted</th>
                    <th>Independent</th>
                </tr>
            </thead>
            <tbody>

                {{-- If item has a level (single row table) --}}
                @if (isset($item['level']))
                    <tr>
                        <td style="width:300px;">{{ ucfirst($key) }}</td>

                        @foreach (['required', 'introduced', 'helped', 'prompted', 'independent'] as $level)
                            <td class="{{ $level == 'required' ? 'is-hidden' : '' }}">
                                <input type="{{ $level == 'required' ? 'hidden' : 'radio' }}" name="{{ $key }}[]"
                                    value="{{ $level }}" {{ $item['level'] === $level ? 'checked' : '' }}>
                            </td>
                        @endforeach
                    </tr>
                @else
                    {{-- Nested items (multiple rows in this table) --}}
                    @foreach ($item as $subKey => $subItem)
                        <tr>
                            <td style="width:300px;">{{ ucfirst($subKey) }}</td>

                            @foreach (['required', 'introduced', 'helped', 'prompted', 'mastered'] as $level)
                                <td class="{{ $level == 'required' ? 'is-hidden' : '' }}">
                                    <input type="{{ $level == 'required' ? 'hidden' : 'radio' }}"
                                        name="{{ $key }}[{{ $subKey }}][]" value="{{ $level }}"
                                        {{ ($subItem['level'] ?? '') === $level ? 'checked' : '' }}>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    @endforeach
    <input type="submit" class="button" value="update progress" class="mb-4">

</form>
