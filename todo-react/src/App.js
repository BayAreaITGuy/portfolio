import React, { Component } from 'react';

class App extends Component {
  constructor(props){
    super(props);
    this.state={
      newItem:"",
      list:[]
    }
  }

  updateInput(key, value){
    //update the react state
    this.setState({
      [key]: value
    })
  }

  addItem(){
    //create item with unique ID
    const newItem={
      id: 1 + Math.random(),
      value: this.state.newItem.slice()
    };

    //copy of current list of items
    const list = [...this.state.list];

    //add new item to list
    list.push(newItem);

    //update state with a new list and reset the newItem 
    this.setState({
      list,
      newItem:""
    })
  }
  deleteItem(id){
    //copy current list of items
    const list = [...this.state.list];

    //filter out item being deleted
    const updatedList = list.filter(item => item.id != id);

    this.setState({list: updatedList});
  }
  render() {
    return (
        <div className="container">
          <h1 className="app-title">
          Add your ToDo list items here!
          </h1>
          <br />
          <input className="input-text"
            type="text"
            placeholder="Type item here..."
            value={this.state.newItem}
            onChange={e => this.updateInput("newItem", e.target.value)}
          />
          <button onClick={() => this.addItem()} className="add-btn">
            Add
          </button>
          <br />
          <ul>
            {this.state.list.map(item => {
                return(
                  <li key={item.id}>
                    {item.value}
                    <button onClick={() => this.deleteItem(item.id)} className="btn">
                      X
                    </button>
                  </li>
                )
            })}
          </ul>
        </div>
    );
  }
}

export default App;
