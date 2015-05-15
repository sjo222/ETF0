module Main where
import Control.Monad

main :: IO ()
main = do
	putStrLn "enter a real number:"
	x <- readLn -- instead of getLine
	print (x + 1 :: Float) -- type annotation