@php
    $quiz_name = $quiz_name ?? '';
@endphp

<p class="menu-label strong">Quizzes</p>
<ul class="menu-list quiz-menu">

    @foreach ($quiz_names as $quiz)
        <li class="quiz-menu-list-item">
            <a data-quizName="{{ str_replace('-', ' ', $quiz) }}" class="{{ $quiz == $quiz_name ? 'is-active' : '' }}"
                href="{{ url('quiz/') . '/' . $quiz }}"><span>{{ ucfirst(str_replace('-', ' ', $quiz)) }}</span></a>
        </li>
    @endforeach
</ul>

<hr>

<div class=" mt-4">
    <button class="button is-text" id="clear-scores">Clear previous scores</button>
</div>

@push('scripts-after')
    <script src="/js/quiz-scores.js"></script>
@endpush
