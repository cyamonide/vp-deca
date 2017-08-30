Rails.application.routes.draw do
  get 'site/about'

  get 'site/events'

  get 'site/executives'

  get 'site/documents'

  get 'site/registration'

  get 'site/contact'

  get 'site/index'
  root 'application#hello'

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
