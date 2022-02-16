import { add, sub } from "./index"

describe('add', () => {
  it('basic', async () => {
    expect(add(3, 2)).toBe(5)
  })
})

describe('sub', () => {
  it('basic', async () => {
    expect(sub(3, 2)).toBe(1)
  })
})