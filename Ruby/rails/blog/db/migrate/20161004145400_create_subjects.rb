class CreateSubjects < ActiveRecord::Migration[5.0]
  def change
    create_table :subjects do |t|
      t.string "name"
      t.integer "position"
      t.boolean "visible", :default => false

      t.timestamps
    end
  end
end
