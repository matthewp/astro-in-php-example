import { useState } from 'react';

export default function({ initialCount }) {
  const [count, setCount] = useState(initialCount || 0);
  return (
    <div>
      <h2>Counter</h2>
      <h3>Count: {count}</h3>
      <button onClick={() => setCount(count + 1)}>Increment</button>
    </div>
  )
}