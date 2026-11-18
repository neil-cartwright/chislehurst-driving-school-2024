 <div class="notification is-white mb-2">
     <div class="content w-80ch">
         {{ $content }}
     </div>
 </div>
 @isset($case_study)
     <aside class="notification case-study has-texture"
         style=" background-image: url('{{ asset('/img/textures/corrugation.png') }}');">
         {{ $case_study }}
     </aside>
 @endisset
