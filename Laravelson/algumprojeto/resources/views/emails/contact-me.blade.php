@component('mail::message')

  # A Heading

  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis mauris sed magna tristique congue.

  - A list
  - goes
  - on

  @component('mail::button', ['url' => 'https://laracasts.com'])
    Visit Laracasts
  @endcomponent
@endcomponent
