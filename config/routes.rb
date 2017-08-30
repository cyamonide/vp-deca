Rails.application.routes.draw do
  get '/index', to: 'site#index'
  
  get '/about', to: 'site#about'

  get '/events', to: 'site#events'

  get '/executives', to: 'site#executives'

  get '/resources', to: 'site#documents', as: 'resources' # ignore this; you named it documents originally lol

  get '/registration', to: 'site#registration'

  get '/contact', to: 'site#contact'
  
  root 'site#index'

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
