
<div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
<span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
</div>
<div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
<span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
</div>
<div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
<span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
</div>
<div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
<span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
</div>
<div class="p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
<span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
</div>

<div {{$attributes->merge(['class' => "bg-$color-100 border-1-4 border-$color-500 text-$color-700 p-4"])}} role="alert">
  <p class="font-bold">{{$title}}</p>
  <p>{{$slot}}</p>

</div>