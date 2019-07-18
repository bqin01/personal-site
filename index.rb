require 'sinatra'
require 'json'

class Appl < Sinatra::Base
  get '/' do
    subpages = File.open("data/subpages.json")
    @jsonsubpages = JSON.load(subpages)
    subpages.close()
    erb :index
  end
end
