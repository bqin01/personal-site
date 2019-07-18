require 'sinatra'
require 'json'

class Appl < Sinatra::Base
  get '/' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    @curpage = "Homepage"
    erb :index
  end
  get '/about' do
    @curpage = "About"
  end
end
