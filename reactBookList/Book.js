import React from "react";

const Book = ({ img, title, author }) => {
  const clickHandler = () => {
    alert("Book added to cart!");
  };
  const complexExample = (author) => {
    console.log(author);
  };

  return (
    <article
      className="book"
      onMouseOver={() => {
        console.log(title);
      }}
    >
      <img src={img} alt="" />
      <h1 onClick={() => console.log(title)}>{title}</h1>
      <h4>{author}</h4>
      <button type="button" onClick={clickHandler}>
        Add to cart!
      </button>
      {/*       
      <button type="button" onClick={() => complexExample(author)}>
        more complex example
      </button> 
      */}
    </article>
  );
};

export default Book;
