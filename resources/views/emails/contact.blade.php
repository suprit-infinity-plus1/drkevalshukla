<h2>New Form Submission</h2>

<ul>
    @foreach ($data as $key => $value)
        @if (!empty($value))
            <li><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</li>
        @endif
    @endforeach
</ul>